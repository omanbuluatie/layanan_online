<?php

function generateStatusBadge($status)
{
    switch ($status) {
        case 0:
            return '<span class="badge bg-info">MENDAFTAR</span>';
        case 1:
            return '<span class="badge bg-info">Mengisi Metadata</span>';
        case 2:
            return '<span class="badge bg-info">Pengajuan Permohonan</span>';
        case 4:
            return '<span class="badge bg-info">Pengajuan Diproses</span>';
        case 5:
            return '<span class="badge bg-danger">Ditolak</span>';
        case 9:
            return '<span class="badge bg-success">Selesai</span>';
        default:
            return '<span class="badge bg-success">Live</span>';
    }
}
